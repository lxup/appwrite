PUT /v1/account/verification HTTP/1.1
Host: cloud.appwrite.io
Content-Type: application/json
X-Appwrite-Response-Format: 1.6.0
X-Appwrite-Project: <YOUR_PROJECT_ID>
X-Appwrite-Session: 
X-Appwrite-JWT: <YOUR_JWT>

{
  "userId": "<USER_ID>",
  "secret": "<SECRET>"
}