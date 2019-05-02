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

