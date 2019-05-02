# k8s-helming: Deploy A PHP Application On Kubernetes With Helm

Run a custom PHP application (PHP-FPM), MySQL database (with persistent disk secret credentials) and Nginx server on Kubernetes with Helm charts.

#Introduction
This README walks you through the process of running an example PHP (PHP-FPM) application on a Kubernetes cluster.
This solution allows you to automate the deployment, the scaling and management of the application containers.

The first step is to obtain the application source code, Dockerfile and the docker-compose.yml file
and use them as a starting point for creating a custom Helm chart to automate the application deployment in a Kubernetes cluster. 

# Steps:
To create your own application in PHP-FPM and deploy it on Kubernetes using Helm, you will typically follow these steps:

1.  Obtain the application source code
2.  Build the Docker image
3.  Publish the Docker image
4.  Create the Helm Chart
5.  Deploy the example application in Kubernetes

# Step 1: Obtain The Application Source Code

`git clone https://gitlab.com/aymen_segni/basic-k8s-helm.git`
`cd basic-k8s-helm/`

**the app** folder you will see a file named phpminiadmin.php. This is a small PHP application for accessing and managing MySQL databases which we will use as an example application.

# Step 2: Build The Docker Image
The source code already contains the Dockerfile and the docker-compose.yml file needed for this example.
Replace the **USERNAME** placeholder in the app/docker-compose.yml file with your Docker ID.

Build the image using the command below. Remember to replace the USERNAME placeholder with your Docker ID:

docker build . -t  USERNAME/phpfpm-app:0.1.0
Run the docker-compose up command in order to create and start the containers:

docker-compose -f app/docker-compose.yml up
Check if the application is running correctly by entering http://localhost/phpminiadmin.php in your default browser.

To log in to the application, you must connect first to the database. Click the “advanced settings” link and enter the information below. Then, click “Apply”.

DB user name: test
Password: test
DB name: test
MySQL host: test
port: 3306