__USERS__

[GET] /__users__
Shows a list of users
REQUEST:
Parameters:
sortBy id|username
sortDir asc|desc
skip int = 0
limit int = 25
name - filter by name  string
RESPONSE:
[
    {
        "id" : INT,
        "username" : String,
        "password" " : String
    },
    {
        "id" : INT,
        "username" : String,
        "password" " : String
    }
]
EXCEPTIONS:
500:
{
    code: 12321321,
    message: "Cannot connect to database"
}
400:
{
    code: 12309213,
    message: "Parameter marko is not allowed"
}

[GET] /__user__
Displays a single user
REQUEST:
user/id
RESPONSE:
{
    "id" : INT,
    "username" : String,
    "password" " : String
}
EXCEPTIONS:
500:
{
    code: 12321321,
    message: "Cannot connect to database"
}
404:
{
    code: 12309213,
    message: "User not found"
}

[POST] /__users__
Creates a new user
REQUEST:
users/add
RESPONSE:
{
    "id" : INT,
    "username" : String,
    "password" " : String
}
EXCEPTIONS:
500:
{
    code: 12321321,
    message: "Cannot connect to database"
}
400:
{
    code: 12309213,
    message: "Parameter example is not allowed"
}

[PUT] /__user__
Updates an existing user
REQUEST:
users/edit
RESPONSE:
{
    "id" : INT,
    "username" : String,
    "password" " : String
}
EXCEPTIONS:
500:
{
    code: 12321321,
    message: "Cannot connect to database"
}
404:
{
    code: 12309213,
    message: "User not found"
}
400:
{
    code: 12309213,
    message: "Parameter example is not allowed"
}

__CLIENTS__

[GET] /__clients__
Shows a list of clients
REQUEST:
Parameters:
sortBy id|name
sortDir asc|desc
skip int = 0
limit int = 25
name - filter by name string
pet name - filter by pet name string
RESPONSE:
[
    {
        "id" : INT,
        "name" : String,
        "picture" : String,
        "phone" : INT,
        "email" : String,
        "gender" : String
    },
    {
        "id" : INT,
        "name" : String,
        "picture" : String,
        "phone" : INT,
        "email" : String,
        "gender" : String
    }
]
EXCEPTIONS:
500:
{
    code: 12321321,
    message: "Cannot connect to database"
}
400:
{
    code: 12309213,
    message: "Parameter example is not allowed"
}






