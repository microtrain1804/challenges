# Challenges

## Password Hashing

1. Create 3 arrays to mock user and system data
    1. ```$userInput = ['password'=>'xxx'];```
    1. ```$userData = ['hash'=>'xxx', 'salt=>'xxx'];```
    1. ```$sysConfig = ['salt'=>'xxx'];```
2. Create a hashing algo 
    1. that accepts 3 values
        1. ```$password```
        1. ```$userSalt```
        1. ```$systemSalt```
    2. use this algo to create ```$userData['hash']``` and store it in the mock data array.
3. Create a verify function that compares ```$userData['hash']``` to the hashed value of ```$password```, ```$userSalt``` and ```$systemSalt``` and return **true** on match and **false** on fail.
