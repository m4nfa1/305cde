
# 305CDE - Developing the Modern Web 2
* Man Wing Fai - 147377507
* Demo: http://m4nfa1.net/305cde/

##API
#### User Login
```javascript
URI	http://api.m4nfa1.net/305cde/user/login
Method	POST
Data	{
    "usrname": "user1",
    "usrpasas": "user1"
}
Result	{
    "status": "200",
    "message": "Logged",
    "data": [
        {
            "user_id": "46",
            "user_loginname": "user1",
            "user_logintime": "2016-08-03"
        }
]
}
Error	{
    "status": "404",
    "message": "No User",
    "data": false
}
```
----------------------------------------------------------------------------------------------------------------------
#### Register
```javascript
URI	http://api.m4nfa1.net/305cde/user/register
Method	PUT
Data	{
    "usrname": "user0",
    "usrpasas": "user0",
    "usremail": "user0@address.com",
    "usrbday": "2000-01-01",
    "usrgender": "M"
}
Result	{
    "status": "200",
    "message": "ok",
    "data": true
}
Error	{
    "status": "500",
    "message": "Error",
    "data": false
}
```
--------------------------------------------------------------------------------------------------------------------------
#### User Profile Update
```javascript
URI	http://api.m4nfa1.net/305cde/user/update
Method	POST
Data	{
    "usrname": "user0",
    "usrpasas": "000",
    "usremail": "user0@address.com"
}
Result	{
    "status": "200",
    "message": "Updated ",
    "data": true 
}
Error	{
    "status": "500",
    "message": "Not success",
    "data": false
}
```
--------------------------------------------------------------------------------------------------------------------------
#### Delete User
```javascript
URI	http://api.m4nfa1.net/305cde/user/delete
Method	DELETE
Data	{
    "usrname": "user0",
    "usrpasas": "000"
}
Result	{
    "status": "200",
    "message": "Delete success",
    "data": true 
}
Error	{
    "status": "500",
    "message": "Bad Request",
    "data": false
}
```
--------------------------------------------------------------------------------------------------------------------------
#### User Type Filter
```javascript
URI	http://api.m4nfa1.net/305cde/user/type
Method	GET
Data	{
    "usrtype": "user"
}
Result	{
    "status": "200",
    "message": "Delete success",
    "data": [
        {
            "user_id": "46",
            "user_status": "notactive",
            "user_type": "user",
            "user_createtime": "2016-08-03",
            "user_loginname": "user1",
            "user_password": "24c9e15e52afc47c225b757e7bee1f9d",
            "user_email": "user1@address",
            "user_emailkey": "emailkey",
            "user_birthday": "2003-11-30",
            "user_gender": "M",
            "user_logintime": "2016-08-03"
        }
]
}
Error	{
    "status": "500",
    "message": "Bad Request",
    "data": null
}
```
--------------------------------------------------------------------------------------------------------------------------
#### Check User
```javascript
URI	http://api.m4nfa1.net/305cde/user/check
Method	GET
Data	{
    "usrname": "user0",
}
Result	{
    "status": "200",
    "message": "Delete success",
    "data": {
        "user_id": "53",
        "user_status": "notactive",
        "user_type": "user",
        "user_createtime": "2016-08-03",
        "user_loginname": "user0",
        "user_password": "c6f057b86584942e415435ffb1fa93d4",
        "user_email": "user0@address",
        "user_emailkey": "emailkey",
        "user_birthday": "2000-01-01",
        "user_gender": "M",
        "user_logintime": "2016-08-03"
    }
}
Error	{
    "status": "404",
    "message": "Not Found",
    "data": false
}
```
--------------------------------------------------------------------------------------------------------------------------
#### Show All News
```javascript
URI	http://api.m4nfa1.net/305cde/news
Method	GET
Data	{
}
Result	{
    "status": "200",
    "message": "Delete success",
    "data": {
            "news_id": "8",
            "title": "South Sudan's rul… ",
            "date": "2016-07-03",
            "content": "An international conflict research group said South Sudan was… ",
            "image": "e4BElCKbXLS6F8gJS0A.jpg"
        }
}
Error	{
    "status": "500",
    "message": " Bad Request ",
    "data": null
}
```
--------------------------------------------------------------------------------------------------------------------------
#### Check Booking
```javascript
URI	http://api.m4nfa1.net/305cde/booking/check
Method	GET
Data	{
    "usrname": "user2"
}
Result	{
    "status": "200",
    "message": "ok",
    "data": [
        {
            "booking_id": "67",
            "booking_name": "Lai Chi Kok",
            "booking_location": "Lai Chi Kok",
            "booking_type": "Rapid",
            "booking_user": "user2",
            "booking_date": "2016-08-26",
            "booking_time": "15:00:00"
        }
    ]
}
Error	{
    "status": "500",
    "message": "Bad Request",
    "data": null
}
```
--------------------------------------------------------------------------------------------------------------------------
#### AIDS Test Booking
```javascript
URI	http://api.m4nfa1.net/305cde/booking/book
Method	PUT
Data	{
    "bklocation": "Central",
    "bktype": "Rapid",
    "bkuser": "user0"
    "bkdate": "2016-08-26",
    "bktime": "18:00:00",
}
Result	{
    "status": "200",
    "message": "ok",
    "data": true
}
Error	{
    "status": "500",
    "message": "Bad Request",
    "data": null
}
```
--------------------------------------------------------------------------------------------------------------------------
#### Delete Booking
```javascript
URI	http://api.m4nfa1.net/305cde/booking/delete
Method	DELETE
Data	{
    "bkid": "71",
    "bkusre": "user0"
}
Result	{
    "status": "200",
    "message": "ok",
    "data": true
}
Error	{
    "status": "500",
    "message": "Bad Request",
    "data": false
}
```
