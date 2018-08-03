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
Parameters:
username
password
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

[GET] /__client__
Shows a specific client by ID
REQUEST:
client/ID
RESPONSE:
    {
        "id" : INT,
        "name" : String,
        "picture" : String,
        "phone" : INT,
        "email" : String,
        "gender" : String
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
    message: "Client not found"
}

[POST] /__clients__
Creates a new client
REQUEST:
clients/add
Parameters:
client name
client email
client phone
client picture
client gender
RESPONSE:
    {
        "id" : INT,
        "name" : String,
        "picture" : String,
        "phone" : INT,
        "email" : String,
        "gender" : String
    },
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

[PUT] /__client__
Updates an existing client
REQUEST:
clients/edit
RESPONSE:
    {
        "id" : INT,
        "name" : String,
        "picture" : String,
        "phone" : INT,
        "email" : String,
        "gender" : String
    },
EXCEPTIONS:
500:
{
    code: 12321321,
    message: "Cannot connect to database"
}
404:
{
    code: 12309213,
    message: "Client not found"
}
400:
{
    code: 12309213,
    message: "Parameter example is not allowed"
}

__PETS__

[GET] /__pets__
Shows a list of pets
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
        "breed" : String,
        "condition" : String,
        "age" : INT,
        "gender" : String,
        "customer_id" : INT
    },
    {
        "id" : INT,
        "name" : String,
        "breed" : String,
        "condition" : String,
        "age" : INT,
        "gender" : String,
        "customer_id" : INT
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

[GET] /__pet__
Shows a specific pet
REQUEST:
pets/ID
RESPONSE:
    {
        "id" : INT,
        "name" : String,
        "breed" : String,
        "condition" : String,
        "age" : INT,
        "gender" : String,
        "customer_id" : INT
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
    message: "Pet not found"
}

[POST] /__pets__
Creates a new pet
REQUEST:
pets/add
RESPONSE:
    {
        "id" : INT,
        "name" : String,
        "breed" : String,
        "condition" : String,
        "age" : INT,
        "gender" : String,
        "customer_id" : INT
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

[PUT] /__pet__
Updates an existing pet
REQUEST:
pets/edit
RESPONSE:
    {
        "id" : INT,
        "name" : String,
        "breed" : String,
        "condition" : String,
        "age" : INT,
        "gender" : String,
        "customer_id" : INT
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
    message: "Pet not found"
}
400:
{
    code: 12309213,
    message: "Parameter example is not allowed"
}

__VISITS__

[GET] /__visits__
Shows a list of visits
REQUEST:
Parameters:
sortBy id|title
sortBy date|time
sortBy customerName|petName
sortDir asc|desc
skip int = 0
limit int = 25
name - filter by name string
pet name - filter by pet name string
RESPONSE:
[
    {
        "id" : INT,
        "title" : String,
        "description" : String,
        "date" : DATE,
        "time" : INT,
        "customer_id" : INT,
        "user_id" : INT,
        "pet_id" : INT
    },
    {
        "id" : INT,
        "title" : String,
        "description" : String,
        "date" : DATE,
        "time" : INT,
        "customer_id" : INT,
        "user_id" : INT,
        "pet_id" : INT
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

[GET] /__visit__
Shows a single visit
REQUEST:
visits/id
RESPONSE:
    {
        "id" : INT,
        "title" : String,
        "description" : String,
        "date" : DATE,
        "time" : INT,
        "customer_id" : INT,
        "user_id" : INT,
        "pet_id" : INT
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
    message: "Visit not found"
}

[POST] /__visits__
Creates a new visit
REQUEST:
visits/add
RESPONSE:
    {
        "id" : INT,
        "title" : String,
        "description" : String,
        "date" : DATE,
        "time" : INT,
        "customer_id" : INT,
        "user_id" : INT,
        "pet_id" : INT
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

[PUT] /__visit__
Updates an existing visit
REQUEST:
visits/edit
RESPONSE:
    {
        "id" : INT,
        "title" : String,
        "description" : String,
        "date" : DATE,
        "time" : INT,
        "customer_id" : INT,
        "user_id" : INT,
        "pet_id" : INT
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
    message: "Visit not found"
}
400:
{
    code: 12309213,
    message: "Parameter example is not allowed"
}