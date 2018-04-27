<?php

//// Create salt values 
//// !!!! WARNING !!!! This is NOT production grade randomization
//echo hash('sha512', rand(10000000000, 99999999999));

//Mock post data
$userInput=[
    'password'=>'6DN#@BZyRGAq'
];

//Mock user record
$userData=[
    'salt'=>'49bf0edae7299593c0d4c1ac51acc2f1391cd4ba65c4a19d480431033158f5c26a46c10320485c54eee01ea3557db22f0f33c4c239fe87f1a7c1506657a8abf0',
    'hash'=>'15607275dbffa95ef7ea7232b2e7184da0b8ce230f26475157174105fc975c4b8d52dfa57e7fdb6eb409fdee8459239ed08fe9544faeebd769aa13885515fd3c'
];

//Mock sys config data
$sysConfig=[
    'salt'=>'cd17ecd953ebe5ffcbe4bea4e77798cf044f07f2f31ad2dbe17b73e257a83da4c0e7c4fa5db887b4bd9cd9c14b63bd65809af597a5aabfaeed8e2b31acb0ca49'
];

function algo($password, $salt, $pepper){
    
    $hash=hash('sha512', $password . $salt . $pepper);
    for($i=0; $i<5000; $i++){
        $hash = hash('sha512', $hash);
        $hash = hash('whirlpool', $hash);
    }

    return $hash;
}

//// Provide the hash for $userData['hash']
//echo $hashed;

function verify($hash1, $hash2){
    if($hash1===$hash2){
        return true;
    }

    return false;
}


//// TEST VALID RESULTS
$hashed = algo(
    $userInput['password'], 
    $userData['salt'], 
    $sysConfig['salt']
);

echo '<pre>';
var_dump(verify($hashed, $userData['hash']));
echo '</pre>';

//// TEST INVALID RESULTS
$hashed = algo(
    'password123', 
    $userData['salt'], 
    $sysConfig['salt']
);

echo '<pre>';
var_dump(verify($hashed, $userData['hash']));
echo '</pre>';