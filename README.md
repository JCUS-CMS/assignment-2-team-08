# Assignment-2-team-08
Assignment-2-team-08 created by GitHub Classroom


# Doctors Connect - Malaysia

This project requires us to create a website for Doctors Connect - Malaysia with the Starter Theme we created. We will be using a content management system to edit and fix the content of the website. The main goal of the website is to inspire more people to join their medical volunteer team and contribute to the society. This site will signify their goal to establish medical institutions in an economic or remote areas to provide medical services. 

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.




### Prerequisites

1. Set Up VVV to connect to Wordpress for local environment development

2. Install Vagrant and Scrotch Box

3. Set Up SSH Private Keys for siteground hosting, which will help connect local environment and staging area




### Setting up Local Environment

Download Wordpress in your own device. 

Delete all files in the wp-content folder in Wordpress theme files.

Clone and download from Github - https://github.com/JCUS-CMS/assignment-2-team-08.git file.

Transfer the downloaded file to a wp-content file.

'vagrant up' the scrotchbox and go to vvv.test to open local wordpress site.




### Syncronizing Data from local to server

We use the plugin 'WP Sync DB' to sync the data between the local wordpress environment to the remote server. 

More information - [WP Sync DB](https://github.com/wp-sync-db/wp-sync-db) 




### Transferring files from local to server

We use the 'WebHook', the built in feature of GitHub, to transfer files from local host to Siteground.

More information - [WebHook](https://developer.github.com/webhooks/) 



### Commiting to GitHub 

Add the changed file to GitHub

```
git add .
```

Commit the file 

```
git commit -m "[commit message]"
```

Push the file to GitHub

```
git push
```



## Built With

* [Wordpress](https://wordpress.org/) - The content management system used.



## Authors

* **Kphoo Thaw Naing** - *Project Leader* 
* **Shoon Lei Tun**
* **Khin Yadanar Aung**
* **Hom Nan Thawe Htun**


