# EddyCorrelation
===============

Welcome to the Eddy Correlation website for Professor Berg!

## Onboarding

If you are new to the project or setting up on a new/additional computer. Look here!

### Prerequisites
###### Local Enviornment
You will need [MAMP](https://www.mamp.info/en/)/[WAMP](http://www.wampserver.com/en/) to run the site in a dev enviornment.

###### Untrackd Files
`.htaccess` should be in the root director of your repo and should look like the following:

```
# For live server, comment in dev
#AddHandler su-php-script .php
#RewriteBase /berg/


RewriteEngine on
RewriteCond $1 !^(index\.php|text\.php|img|js|css|journals|vid|data|robots\.txt|slides)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /berg/index.php/ [L,QSA]

#For a 3rd server we rarely use
#Redirect 301 / http://faculty.virginia.edu/

``` 

###### Set up repo locally
Clone the repo into `htdocs` (MAMP), sometimes `www` if WAMP

The repo will be cloned to the directory `htdocs/EddyCorrelation/*stuff*`. You will want to change the name of the directory `EddyCorrelation` to `berg` so it matches the url rewrites in `.htaccess` made to work with the url schema on the live site. You can also achieve this in one step when cloning by using the command 
```
$ git clone <repo> berg
```

This is important otherwise the CSS & JS won't work and the menu will return `not found` errors when attempting to navigate locally. 

Once this is complete you should be able to run the site locally using MAMP.


## Conventions

##### Branching to make changes

Create a branch to make all updates on `git checkout -b <branch-name>` 

Try to make your branch name is descriptive of what your modifications are. 

Once you have completed your updates and **tested** them on the locally running dev site, you should create a pull request against the master branch. 

Look at the diffs and review your code. Once you are confident you have made your updates you may merge the branch to master.


Making updates on branches and then merging them **after testing** will prevent you from getting into a situation where you accidentally commit something that breaks your main (master) branch and makes you extremely stressed. 

##### Commits
Commits should be descriptive of their contents and the changes made.

##### Pull Requests
If making lots of updates to the site, create a separate branch and pull request for each distinct update. Pull requests should be as focused to a task/end goal as possible. 

If you need to update publications and some CSS, make a pull request for each. Try to to keep any given pull request focused on a single objective or update. 

#### Helpful Git Commands
* `git fetch` update your list of branches in your local terminal
* `git branch` check which branch you are on
* `git stash` stash all changes made since the last commit
* `git reset` (has options, google) useful if you f*ck something up and want to go back to a pervious (working) commit
* `git checkout` switch between branches
* `git diff` see the changes you have made since your last commit

##Tools
##### Sublime Text 2
I recommend [Sublime](http://www.sublimetext.com/blog/articles/sublime-text-2-0-released) for development, it has lots of great plugins. (It will ask you periodically if you want to buy a lisence but you can always dismiss it and keep using it for free)

You will want to install [Sublime Package Control](https://packagecontrol.io/) for easily installing and managing any sublime plugins you want. 

* **Recommended Plugin** I highly recommend you install the plugin `gitgutter` once you have installed package control. If will mark the lines you have changed since the last commit in sublime's gutter (space between line numbers and code) and is like a real-time `git diff`. 

##### Cisco Anyconnect Secure Client
You will need this for connecting to the live server if you are not on the UVA network on grounds.
[Cisco Anyconnect from UVA Software Gateway](http://its.virginia.edu/software/displayPackages.php?tId=63)

Once installed you should have `UVA Anywhere` as a connection option in the VPN.

## Deploying to Live Site

#### Off Grounds

1. Start Cisco VPN
2. Connect to UVA Anywhere.
3. Go to finder. In the menu bar `Go -> Connect to Server ->`
4. Enter the server address: `smb://home2.virginia.edu/WebHosts/faculty.virginia.edu/doc/berg`
5. Connect
6. Once Connected to the server, navigate into the server in terminal
7. Navigate to the site directory (server address above should connect you directly to the right place)
8. git pull using the command `$ git pull github master` to pull the most recent copy of the master branch to the live site. 
9. Disconnect from all servers when finished. 


#### On Grounds (on UVA Network)
* Skip steps 1 & 2 with the VPN. Start at #3 `Go -> Connect to Server ->` follow instructions as normal. 


#### Kukla's Notes

When pulling from server (Kukla) use: 
$ git pull github master

Connection address for Cisco AnyConnect:
smb://home2.virginia.edu/WebHosts/faculty.virginia.edu/doc/berg
