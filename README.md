# Arent backend  Test


Back-end test built by laravel 9 

## ERD 

![image info](./drawSQL-arent.png)


## Import DB

Please import file `arent.sql` to DB with DB name `arent`

## Install with Composer

```
    $ php composer.phar install or composer install
```

## Set Environment

```
    $ cp .env.example .env
```

## Set the application key

```
   $ php artisan key:generate
```

## Run Start Application 
```
   $ php artisan  serve
```

## JSON Response example
### For top page and my record page 
#### End Point : `http://127.0.0.1:8000/api/login` POST
#### Body Request :
 ```json
  {
    "email": "test@arent.jp",
    "password": "admin"
}
```
#### Response :
 ```json
{
    "status": "success",
    "user": {
        "id": 1,
        "name": "ozawa",
        "email": "test@arent.jp",
        "role_id": null,
        "created_at": "2023-06-24T08:29:53.000000Z",
        "updated_at": "2023-06-24T08:29:53.000000Z",
        "gender": "",
        "height": 183,
        "weight": 75.5,
        "exercise": [
            {
                "id": 1,
                "name": "running",
                "description": "run around the lake , which has rad over  2  km ",
                "sets": 2,
                "reps": 12,
                "kcal_target": 700,
                "duration": 900
            }
        ],
        "body_record": [
            {
                "id": 2,
                "date": "2023-06-23",
                "weight": 87,
                "fats": 11
            }
        ],
        "diaries": [
            {
                "id": 1,
                "name": "test diary",
                "description": "When you start shouting, I want to end the conversation immediately.",
                "date": "2023-06-24 15:34:16"
            }
        ],
        "plans": [
            {
                "id": 1,
                "name": "Low Carb",
                "description": "People often use low carb diets to promote weight loss and stabilize blood sugar levels. Though guidelines can vary, low carb diets typically limit foods high in carbs or added sugar",
                "meal": [
                    {
                        "id": 1,
                        "name": "coffee",
                        "description": "Beverages made with only espresso and hot water, such as an Americano, will not contain carbs.",
                        "calories": 2,
                        "protein": 3,
                        "carbohydrates": 4,
                        "fats": 5
                    }
                ]
            }
        ]
    },
    "authorisation": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNjg3NjczMzk1LCJleHAiOjE2ODc2NzY5OTUsIm5iZiI6MTY4NzY3MzM5NSwianRpIjoiUFNTa1BtRERvV1pmTUlVQiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.UAw_8-G_YmhmFY4qAiaSU0P1g5yjgeK1DQ2VQLzipUs",
        "type": "bearer"
    }
}
```
### For Column page  :

#### End Point : `http://127.0.0.1:8000/api/plans` GET
#### Response :
 ```json
  {
    "status": "success",
    "plans": [
        {
            "id": 3,
            "name": "Lifestyle",
            "description": "Some stress at work arises and we get into a big argument with our boss",
            "meal": [
                {
                    "id": 2,
                    "name": "Yoga ",
                    "description": "Whether you are young or old, overweight or fit, yoga has the power to calm the mind and strengthen the body",
                    "calories": 8,
                    "protein": 9,
                    "carbohydrates": 6,
                    "fats": 5
                }
            ]
        }
    ]
}
```





