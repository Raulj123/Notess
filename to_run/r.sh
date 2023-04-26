#!/bin/bash

echo "Checking dependencies..."

if [ -d "/opt/lampp/" ]; then
    echo "XAMPP is installed."
else
    echo "XAMPP is not installed. Please install XAMPP to run this project."
    echo "website -> https://www.apachefriends.org"
     echo "Follow Instruction in dir to_run -> instructions.txt"
fi

