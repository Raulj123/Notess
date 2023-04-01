const notesContainer = document.getElementById("app");
const addNoteButt = notesContainer.querySelector(".add-note");
addNoteButt.style.position = "fixed";
	addNoteButt.style.right = "90px";
	addNoteButt.style.width = "200px";
	const containerHeight = notesContainer.getBoundingClientRect().height;
  addNoteButt.style.bottom = `${containerHeight + 20}px`;
input = document.getElementById("search_input");
input.addEventListener("input", () => searchFor(input));

<<<<<<< HEAD
=======

function searchFor(input) {

	const notes = getNotes();
	const searchQuery = input.value.trim().toLowerCase();
	const filteredNotes = notes.filter(note => note.content.toLowerCase().includes(searchQuery));

	if (searchQuery === "") {
		displayNotes(notes);
	} else {
		displayNotes(filteredNotes);
	}

}


function displayNotes(notes) {
	notesContainer.innerHTML = "";
	notesContainer.appendChild(addNoteButt);
	const notesPerRow = Math.floor((notesContainer.offsetWidth - 40) / 220); // adjust the note width and gap as necessary
  let currentRow = 0;
  
  notes.forEach((note, index) => {
    if (index % notesPerRow === 0) {
      currentRow++;
    }
	
		const noteElement = createNote(note.id, note.content);
		notesContainer.appendChild(noteElement, addNoteButt);
	});
	// Calculate the height of the last row and add it to the top offset of the button
	const lastRowHeight = notesContainer.scrollHeight - (currentRow - 1) * 220 - 20;
	addNoteButt.style.top = `${lastRowHeight + 40}px`;
}

>>>>>>> master
getNotes().forEach(note => {
	const noteElement = createNote(note.id, note.content);
	notesContainer.insertBefore(noteElement, addNoteButt);

});

addNoteButt.addEventListener("click", () => addNote());



function getNotes() {

	return JSON.parse(localStorage.getItem("notess") || "[]");  // this function retrieves an array of "notess" from the local storage, or an empty array if none is found.

}

function saveNotes(notes) {
	localStorage.setItem("notess", JSON.stringify(notes));
}

function createNote(id, content) {
	const element = document.createElement("textarea");
	element.classList.add("note-text");
	element.value = content;
	element.placeholder = "Empty note";
	element.style.marginBottom = "10px"; 
	element.addEventListener("change", () => {
		updateNote(id, element.value);
	});

	element.addEventListener("dblclick", () => {
		const doDelete = confirm("Are you sure you want to delete?");
		if (doDelete) {
			deleteNote(id, element);
		}
	});
	return element;
}
function updateNote(id, newContent) {
	const notes = getNotes();
	const targetNote = notes.filter(note => note.id == id)[0];
	targetNote.content = newContent;
	saveNotes(notes);
}
function deleteNote(id, element) {
	const notes = getNotes().filter(note => note.id != id);
	saveNotes(notes);
	notesContainer.removeChild(element);
}


function addNote() {
	const existingNotes = getNotes();
	const noteObject = {
		id: Math.floor(Math.random() * 100000), content: ""
	};
	const notesPerRow = Math.floor((notesContainer.offsetWidth - 40) / 220); // adjust the note width and gap as necessary
	const lastRowNotes = existingNotes.slice(-notesPerRow);
	const noteElement = createNote(noteObject.id, noteObject.content);
	
	if (lastRowNotes.length === notesPerRow) {
		const lastNote = notesContainer.lastChild.previousSibling;
		const lastRowHeight = lastNote.offsetTop + lastNote.offsetHeight + 20;
		addNoteButt.style.top = `${lastRowHeight}px`;
		notesContainer.appendChild(addNoteButt);
	  }
	
	
	notesContainer.insertBefore(noteElement, addNoteButt);
	existingNotes.push(noteObject);
	saveNotes(existingNotes);
}







