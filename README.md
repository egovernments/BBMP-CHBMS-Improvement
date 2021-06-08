## BBMP-CHBMS 
BBMP CHBMS application consists of 4 different micro services.
* Frontend - PHP UI Service
* Backend
  - Patient Queue Service
  - BMS Producer
  - BMS Consumer
 
## BBMS Deployment Architecture:
![image](https://user-images.githubusercontent.com/40357140/121186353-a0909400-c884-11eb-9017-9c6b972a13d4.png)

## CI/CD Pipelines
All the services as part this repo will be built and deployed through GitHub Actions upon every PR merge, refer here: https://github.com/egovernments/BBMP-CHBMS-Improvement/actions


## The Env variables that needs to be part of the docker/containers. 
##### Ensure that irrespective of whatever the way that you are running the containers (Either App Services, K8S or anything) all the below env variables needs to be added as env variables. 

#### Portal-ui:
```
	DB_HOST 	
	DB_USER	
	DB_PASSWORD
	DB_NAME
```  

#### Consumer:
```
	JDBC_MYSQL_CONNECTION_URL
	JDBC_MYSQL_CONNECTION_USERNAME
	JDBC_MYSQL_CONNECTION_PASSWORD
	SPRING_CLOUD_AZURE_EVENTHUB_CONNECTION_STRING
	SPRING_CLOUD_AZURE_CHECKPOINT_STORAGE_ACCOUNT
	SPRING_CLOUD_AZURE_CHECKPOINT_ACCESS_KEY
	SPRING_CLOUD_STREAM_PATIENT_DESTINATION
	SPRING_CLOUD_STREAM_HOSPITAL_DESTINATION
	SPRING_CLOUD_STREAM_EXCEPTION_DESTINATION
```
#### Producer:
	SPRING_CLOUD_AZURE_EVENTHUB_CONNECTION_STRING
	SPRING_CLOUD_AZURE_CHECKPOINT_STORAGE_ACCOUNT
	SPRING_CLOUD_AZURE_CHECKPOINT_ACCESS_KEY
	SPRING_CLOUD_STREAM_PATIENT_DESTINATION
	SPRING_CLOUD_STREAM_HOSPITAL_DESTINATION
	SPRING_CLOUD_STREAM_EXCEPTION_DESTINATION

#### PQS:
```
	spring.datasource.url
	spring.datasource.username
	spring.datasource.password
	server.port
	chbms.realtime_availability.url
	chbdm.realtime_availability.username
	chbdm.realtime_availability.password
	dashboard.url
```  
