1/ INSTALLATION
	1.1/ PERMANENT LOGIN
			$ git config --global --edit

			[user]
			      name = yourname
			      email = yourEmail
			      pass = yourPassword
			      password = yourPassword

	1.2/ INIT PROJECT FOLDER
		- Go into your project folder
		- Open a terminal

		- $ git init
		- $ git remote add origin https://mon.url.git

2/ HOW TO USE IT
	2.1/ UPLOAD
		- Modify / create a file into your project folder

		- $ git add README.md (to select only one file)
			or
		- $ git add -A	(to select all the files in the project)

		- $ git commit -am "commit message"

		- $ git push -u origin master

	2.2/ DOWNLOAD
		- $ git pull -u origin master
