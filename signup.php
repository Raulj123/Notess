<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	
include("connection.php");
	include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{
    //sum was posted 
    $user_name = $_POST['user_name'];
    $password= $_POST['password'];
	
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
    	
        //save to database
        $user_id = random_num(20);
        $query = "insert into users(user_id, user_name, password,date) values('$user_id', '$user_name', '$password',NOW())";
        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }else
    {
        echo "Please enter valid info";
    }


}






?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sign Up </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


   
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
  </head>
  <body class="text-center">


  <style type="text/css">

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #24272b;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
    <form class="form-signin" method = "post">
  <img class="mb-4" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFRIYGRUaGBoaGBkYGBgYGBgYGBwZGhgaGBgcIS4lHB4rHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISGjQhISU0MTQ0NDQxNDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDE0NDQ0NDExMTQ0NDQ0NDQ0NDQxNP/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAECAwUGB//EADwQAAEDAQQIBQIEBQQDAQAAAAEAAhEDBCExQQUSUWFxgZHwIqGxwdEy4QYTQnJSYoKy8RQzksIjU6IV/8QAGAEAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAgEQEBAAMBAQEAAgMAAAAAAAAAAQIRITFBEgMyUWFx/9oADAMBAAIRAxEAPwDj7C3Eq/4J69hQsg8HVWOz6d9F14+Oa+qqtzT3u9yhqYgE8vn2RNYS0DePn3VD/pG8+/2CmnE9XwAbT/lUWjIBFvGHD1VFBms9KnB9ipQO+80VCjSF3easWuM1CQhMVIpigIFRcplVVjAPBKmp1pg8UM8Trd5KdB1x6pBsz3tWV6qJg3k7vcqxwlDuPiA3+5RSqBmW6n+rMYpP8TQ4c++8kbVZ0OPygaHhcWHA4KbOnAVYXqvej7VQ2IFhvvwUUyY5PaKcHcVB7IKuYdZsZjBADJFOUySiKYJymQDFMnKZARhJSSQHUWYeEcvlO83d95pUsO9hUX+49V0fHN9TqtuHeCFeL2jvu5FVD33wQpMv77zSpxdXMTuCWjmXOd0VdqNx4o+zs1WNHDzN6PpiAEkkxKsGKYpEqBclszlQcoPtDRi4dUK+3tmG338krlBIjTbBcNx9VbSxKWJcRjq+V6ZmfP1KzUqeYdJ3+/wi0FaR4HHYfcKmz2/J3X5RMtU2g5B2ulIkfULxvHyiw8HApniU70KKbw9s55+4WbaqWqZyRp8Dp/Sfq3HI8FbWphw76pWbNmsbrtj9QwQ4kFWOBY7u8ImrSDxrNx9fuoAKpjO29QUjsUQEgSZSI75KKFGTJ0yASSSSA6pmB4fCrqYjip60Aqt/1Dmuiuc9R13JUU/rKstB8JVNmN5U304nVEuaNpWlUqtbEkBZb2uc8BuMcFB9leInM7Ut6Eg9+kWDCT3vQz9JnJo5mVQ6ykYnyVbrOUXLJWosfpB5zA4BDvrOOLieaY0nbExpnYVFtPSJKnQbJ4ApMpE43IhrYF38OO+7BIxtExrHPVIHSCehPkrBRMbyHGOBd8K+wNY1pe+8m5rVNhc1we9pgkk3XX/5WkhM21AQ4DBxJb/yu9ljOELoNJ0obIPhJcWHZDiSPdY9ZmsTt/yoqoobULcCQiGW9wxgof8ALOxQIKW6BzrcDi3zT0bYAIMxlw2FZyeCj9UDq72PH1e0fZUWarqmDh1g7VRqHYU/5Tv4T0RsDbXRBGsMRjvWcMUTTtJbcRIw3xsQ5xuSqllVnt7qlFPeI77zQqdKGUFNQU00kkkkw6Z59QoOPiHAp6hw4qDj4xwW9YGtRu5qFmGKe1m4J7OPDzPspvp/Ftk+snYPWEU948M7j6oKzOjXO8X8+iibVeIbJH3+Uv1oaF1KoJgAnHLcNqrqUycGxzQ5rPJB1dsXdVaa1XNnl8J72alwOzvsqJddgnNquILc+/RVueDh0U7NJl5J77uSi7PD2UmHvmVJjrz0QbU0XRqN8bWhw34+q0qtoqRApdZI6QgNBvLXhowImPf25roni5bYzia4vSVFzB4rpJIF3oMM0CRf3vROlXkvdOMmd3hFyHd30Kxvq4TcE03px9PJU64CQWOaTl3CtbSiJBx4+iHNq2DuIVv+rf8AwHz+ESwJiCDGwdRKmXYz3chG2qJBanbXaQRMHL/j8o2F1WmH5c1nWimWmCPvvWixxAJxF/HPqhtIHDgUXxQQuUCnTFSCVZVhVaVB5STJIDpapvbxUXHxjh8pWg+JvH4TOPjHD5W9YoWs4KdD6RxPsqrWcFbQHgB3n2U/R8FaK0W6tJE6oN+QniugZoamxsvwF5yEC+84lN+EINNwGIeSeECPQoj8Ttd+TDf1PaDwvPsFvjjjMd6Rbd6cpabdfDGhoaXQ6BJDjmDhcrLJpCsXQIeSfpLBfw1RKGtNkcwTuBjiqbE52uIJBm4jEcIWO7KvljVZRa+nUdEOBw2azjcsu1WWGlwGBghbGiKDjUey/VLLzvBaRzxS0nQDZbOzW43J3HeOxL1iMwu2e6cG895lTqU9Wbo3bL1WMe9pULbWg6gLwDjqy3jeD5R0XSuwXLaFpnWD9haOrnfZdQ7BbYeJrhtKRru1cLzO0gQTzIJ5hDk495FGaUpapAzgyNlwgdIQLjjx9ljeVcRcbse4R1g0YS3XdhDv7blGwWTXcBF/2nvguppWfwBsZR5Qqww/XanLLTmLY9jAA0S+Zg5DUAv5lButb5mQJMwGtjzCJr6PfL3OkCTBIN4wHlCzHuIKnLip1p2Oq1xc2oB4hc4XCdkJ6uivCXAXZHdAy2SqK1R72NmNVoIbdtMnDec109gGtSZObBPMK8cZlypt05Jkt8Ls5Ad1zULb+nvYj9INLWxF7jdIWfaGEFoJnsfCzymuKl2FTFOo5qVJBs3DFTfY3gTCeyjxjvJaesnJsMOElq/6ZuxJH5oF2k4J3nxNTW0Qeqg917T3ktKxNasQr7P9HB3sh7VkiLC2WP3X+iX0fGn+HbVUp67qcEm5zTmMuHHeun0fpjFpGo7+cEAH9wuI4LJ/B9ma50OaDJdjsDmH3C2LQwNBDCRAPHmCtsOROUlrANvZUeTUpmTkBI4xCPtP5TWf+GmZOPgDG8S50blYyoXC54GOImPMbkJaKDDe+qSeN3IZI3R+Qthtz6TnvLmFzhAEOdqgX3HV94WdXtGu4vLjrOv+kNEyDtOzYpWxzBIbJEGCTGLdgjNBvfEZcAJWWWV8XJEa1UmQcTjOOKpiSOPupCmXG4Z4/dW02ARtu/uUrbn4fYPENzfUlbrlh6Cxdwatty3x8RXG6bd/5Hc1luMHr6FaWmf9x3E+6znRnvWGXq40dFWwMdeJFxgnVDoGE5LYZpR5fIYwMkfqwHnPRcwacd7pVlmtDmkX94J452cK47dDpnSB1xr1NZhwDf08bgRzQLH2ZxwZ/wAYPO5Vf6prrtWD/KSB0vCpeych6eir9X/pflK2tY4hjCJOwEwOeXNajtJUmMDBJcIAAj6Rjfw5LGayMh1J9VCozWBuA3i6eWaJlZ4f5F6TtrHu1mMDWhuqAIvibz17zyK0l4nZPqUUyn4Rz9ce9iGqfW87G+3+VGW6qAiopyohQa+zNk8kfTw5hDWDEo0495f5VQGSVH5qSew2fxE0Co6NvmQJ85WY8+FpR2l73E5yf7iEBHg5qsr1jPD2rJaWgWS97Dm0jyIWbWMtatPQN1o4tJ6tlKf2P43fwrWDJJye4Hm1p/6rceJHJc/Zmaj6zf5mVBwMk+kLo2C5bzxP1jf6WCZy1RnmL/MhC1LC0lxF0EYYZbfldBVpz5eRQr7PAO9LRuNr2Z0HZqB3KFRSb4uXytx9E+NpB/2RlnL/ADQlSyyWxjqE+ZWVxWBYbh+9Qcf7f+wTswH70zWSY/lPqEjbug23uPAdAPkLadggNGWbUaJxN53Eht3kjn4LbGcRXFaa+s8T6rPce+YWhpn63fuPqs5+feYWGXtXBDT4u/4XK9tmkXGfEB1cEO7GeP8Aa5G6KBcI/mB5Ag/KUACgxw24DHiEWHXxwWlZqAa3WNw1WeTtY+gQ1W0TIGbWgnMkTMbFcmgFp4KQ9j6FJO32PomEDgOHuVnO+hzv4j5T/lG2h3gEYkQOZKEt1zWtHcKcjgAqLUnJwszaNhb4Z2ohyjTbAA2D4ULU+Gnp1V+QM/XSVcpKA6fSgMuBxm/zPrKAaPAdx9gfZa1pd+dT/NaLxc8DIjB3A95rJoG5zdvqtL6yisnwcD36rR0a/Vq0XbYb6t9wsxhuI59EfQE0dcYseDyM++qiG6ysyKrHZOaWHiPE3y11qWU3Rsu6YeUHms979ZrHDKHjfgY5iRzWhSZfM3EDrt6egXQkQoPappnJBj2qzeJ7siyOmuT6hCfkEPaNjD1lbz2ql9ITMXxHJLRuZr2MGMnaw8wceis0fo4h4Lo+kx1GK0bWyC0x+tvnI90RSpxf3l8JTGbPabWpqimVVUKsnGaVve7ifUrPI75haGkneN3E+pQL/j1XPl6uLQJA/dHkflE0AWyRcZKopNw/d7FFIkB3PJABJMbVApymKoGTsE9D6FMrrIJeEALUYdYA3asgj+aTPT3Kzre7xAbAt7SrA17gMAT6nFc3XMvPFRlw4qe3Df38p2C8Ky0iHRsAHv7pWdmPkoNpMOHD1QdvfeBzRWAxwxKzKr9YkqreBBJJJSHRaDtWpUDT9LvC7ZfgevqUrdZdSs9rRd9QjJpv6CfJZz9u1bVmtoe6k8/U0/lv3h1wJ6nqtP8ATJjvbqvjI+hw9Vrfh9mu2rTP6miOIm/rCo07Z9V5IF0x1vHrHJNoCtq1m7HSOt/qETmRux0BRL6DHHFhDCOBI9IWq0ILRTwz81m1zag/qud5jzRgK3niYkkUyUoBiq3KZUCgwdtb4f6mebmhKo8NEkwAiXhB22lrtLdvYQAtPSbHGA6/fclbLSGsJm/LjkuZtdmc12whDvtLiIJuUfqz1WkbRUlxUWslPTpyimtAFyjWzJjYEKSSYpgxTJFJAMVJj9W8ZD7e6iUzsDyHv7IBrbXJlxxIk9JPe9ZtjZLtY5epV9ufdAzgdAJ804Gozl5qL2nGfWdLid6NsrIEoOzU9ZwGWJR1oq6jbsclM/yai2Vf0jmhXDJJl5TtxlHpWn/LSU0k9FsXEgjMKtryMCrXXHiqqrYVZRErSNqNYFrvq1ceGHqgrK/Ue2bodB3XwfdV2apqvB7haOm7NDmvH0vE8Hfq+eqXs2p01V5lj8P0u4OuI5OA6FbdJ8hc/o4mqxsXlzctuDgOYJ/qWvY3mNV31NuPfnzXROxA6UxKiCkSgyJUCUiVBzkAnFVPKZ9SEDU0iwYvHmfRBpWuyteII4HMLnbbo4sM5bR3ctt2kGHBw5mPZD1ba0iDqkfuJ/6qctU4xmthOk4ppUGRTFKUyASYpJFAIouy02lj5GDTHGWgH/6QaZ73XNaYke8z6eSWwoc3WeXfpBIah7e+6O+8EXGqLlmWl0uO7s+ajLihNkZqt1jn6IKvU1nT3CZ1VxuJu2ZJqbb5U73wvE4gRmnASAUlcibSSVmu3YkmQp4lRDZEFO43wOad5gSqqZApEFdJYmi0WcsP1Nw44j3C5la+hK5p1S04GQ7lmoxvVtT8MWlzQ5mDqbtYbYwcPLrC6yvZS0NqzOt9XE4H26LlrSz8qsys36HHVfunPhgeW9dLZ7fqsdTcJaRdOw/Hwt8eTSKsa5IlUUHyFN7lRq69YNElVV64aCSYAxQFpr69RrBg0yeI+8dVm6VtJc7UH0i87yFNy0YXSumi46rZDc9pQdJ9M/U9w/pJ9ArWaOfUdLaYAH7RjzWizRBA+jqR8rPWVuz3GY40f/Y7/g74Vbn08qjjyPwtOto1ubmN/rHoqBo9gxqMP9f2RcafGf8AmM2u6fZM6uwYOcOS0nWNm1g/r+QqP/y3n6dV3BwS1RwNQtQNxRAcgzY3a2Ecwp0XXkd3JS36BMplUx95CtT2CUZ8R3A+kBTZj3leofluAJIiRd1x8imFFoqQCdmHFZtQRdnifYd7Ua+87m4b3fZZ7jJkrLJRk7HQmSUwqta+VJUKTXq5kViaSb8xJPcLTQpi7eVVaX5K6UG90mU8uTSYtszJe3eR6rUr0Cyqx8XPw43tPt1WfZvrZxC7HSli17O0geJgDxyEuHSegVYY7lGV0Hs9Vrh+U8eFwgfHwjrK1waAb3sun+IZdRHMblj16d3IFp2giQRyKM0dpGYa834AnPcd6vyiN1ihUKZj07irNztjfFUg4nWHuf7VfWsGs+b4IxGR3jZiirRYQXh4iQQTOB+6MAUzEwVnsupMON+OHwrTTGYnjeepStVoDBJnks2tphowa5FshaaJYNirLBsCxH6bccB31UBpl+wJfuK0261NpEEXLnn43clZW0uXCCInGFQ18qcspQcjeepUAy8lTSKgBmnxnvKEQoNZE71JEUnTO3vu9F6YqtMNYbgA2dwGI5krPebuN/S75Vb3zdkLuJz5SnvmkoHyyWa9vutN4gSgLS2A0cVGUOKUkklENFJIpJgkkkkBp1XQEK3FXWhyoZiOK0vqIIa6HtO8HzXp1BvgA3D0XmLD428R6r0uwCGNG4Rwy8oW38PtRn5GdVsEtLB9TPo3sMlo5Xj+lc7a6RE9393LunUpIdmARxB+4CytLaO1gXNF+Y2/daZY7icctMbR2li2GvN2TsxuK3mVQRIK4+vTgwcO++inYdIupmDe3Z8LCZa5WvrsJTEqmlbmPaCzZfxUg5aEhaaQeIOC5+2aNcMJLd3uujJVbwlcZTcmGAZJQtm3WEG9uOzb91kObGKzuOjVOpAp2MIz6qaSkEmKYlMgHTemaSnZqTXk67tRjRO92QjafRABvqTfyHe5W0KaZtG+Mhd8+cokBPGC1RaBgs+2Zc1o2jJZtsySyEDqKSSzURTJ0yAdJMkjYGVzeoMN44p62Ki03qr6meL3mCCvStGVNZjD/KPReZ1cF3P4ZtGtRbuu6Lf+G9sZ5TjoAVF4TNckSuhmxNL6MDwXNF+Y27xvXL1KN8HET/legOCxtK6NDxrNud6rPPD9di8ctOVs1ZzHXG/1XQ2DSTXjY7Z8LAr0iDBEEK6zaOe/WezIAxnfOA5FYY7l0146cPSLlg2TSkeF/XP7rVZXDhIMrSZSlpc5AW2yh94+r14osvUHORem597SDBxUVo6SpiNbPPesyVlZqg8qt7wFCpV2IZ7iptUMs1pAe1zmhzRB1ZHvvWhpC1fnOB1dVrRcJmemSx7NQm84eqPAVY711NICEikmJVpVV8Fl2p1/JaVc3LJrOlxWeS4gkmSWZkmTpilQSSSSAKrYqCSSq+pgipguq/CH+2f3JJLb+L+yMvHTtUwkkuqskSqaiSSIHL6c+sd5FHfhv9XD3SSXPf7tfjmLX9Z/d7rT0ZieCSSzx9W1AmKSS1DP0ngOKy34FJJZ5enAhwUc0klmbRp4DgppJLWIMmSSTJRXwWQ/FOkss/VxBJJJQZJikklQSSSSA//Z" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal" style="color:white;">Welcome! Create your account</h1>
  <label for="inputEmail" class="sr-only">User name</label>
  <input type="text" id="inputEmail" name="user_name" class="form-control" placeholder="user name" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign up</button>
  <a href="login.php">Click to log in </a>
  <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
</form>
</body>
</html>

