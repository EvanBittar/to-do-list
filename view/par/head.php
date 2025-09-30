<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todo List</title>
    <style>
        *
*::before,
*::after {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f7f7f8;
}

.wrap {
    max-width: 700px;
    margin: 40px auto;
    padding: 24px;
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.tabs {
    display: flex;
    gap: 17px;
    margin-bottom: 17px;
    font-size: 15px;
}

.tabs a {
    text-decoration: none;
    color: #2b8ae2;
}

.tabs a.active {
    font-weight: bold;
    border-bottom: 2px solid #2b8ae2;
}

.lol {
    list-style: none;
    margin: 0;
    padding: 0;
}

.task {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px;
    background: #f5f5f6;
    border-radius: 4px;
    margin-bottom: 10px;
}

.task-check {
    width: 20px;
    height: 20px;
    accent-color: #2b8ae2;
}

.task-label {
    font-size: 15px;
    margin-right: 10px;
}
.task form{
    margin-left: auto;
}
.task form button{
    color: red;
}
.tasks{
    padding-left: 0%;
}
form  {
    display: flex;
    gap: 30px;
    margin-bottom: 14px;
}
input{
    padding: 10px;
    font-size: 15px;
    border-radius: 4px;
    border: 1px solid #ddd;
    outline: none;
}
form button {
    padding: 10px 13px;
    font-size: 17px;
    border-radius: 4px;
    border: 1px solid #ddd;
    background: #f4f4f4;
    cursor: pointer;
}
.error{
    color: red;
    font-size: small;
    margin: 2%;
}
.login{
    display: inline-block;
    background-color: #2575fc;
    color: white;
    padding: 8px 10px;
    text-align: center;
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    margin-bottom: 2%;
}
    </style>
</head>