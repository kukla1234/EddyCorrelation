# EddyCorrelation
===============

Eddy Correlation website for Professor Berg

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

#Redirect 301 / http://faculty.virginia.edu/

``` 

###### Set up repo locally
Clone the repo into `htdocs` (MAMP), sometimes `www` if WAMP
The repo will be cloned to the directory `htdocs/EddyCorrelation/*stuff*`. You will want to change the name of the directory `EddyCorrelation` to `berg` so it matches the url rewrites in `.htaccess` made to work with the url schema on the live site. 

This is important otherwise the CSS & JS won't work and the menu will return `not found` errors when attempting to navigate locally. 

Once this is complete you should be able to run the site locally. 


## Conventions

###### Branching to make changes

Create a branch to make all updates on `git checkout -b <branch-name>` 
Try to make you branch name descriptive of what your updates are. 
Once you have completed your updates and **tested** them on the locally running dev site, you should create a pull request against the master branch. 
Look at the diffs and review your code. Once you are confident you have made your updates you may merge the branch to master.

Making updates on branches and then merging them **after testing** will prevent you from getting into a situation where you accidentally commit something that breaks your main (master) branch and makes you extremely stressed. 

###### Commits
commits should be descriptive of their contents and the changes made

###### Pull Requests
If making lots of updates to the site, create a separate branch and pull request for each distinct update. Pull requests should be as focused to a task of end goal as possible. 
If you need to update publications and some CSS, make a pull request for each. Try to to keep any given pull request focused on a single objective or update. 

#### Helpful Git Commands
`git fetch` update your list of branches in your local terminal
`git branch` check which branch you are on
`git stash` stash all changes made since the last commit
`git reset` (has options, google) useful if you f*ck something up and want to go back to a pervious (working) commit
`git checkout` switch between branches
`git diff` see the changes you have made since your last commit

##Tools
###### Sublime Text 2
I recommend [Sublime](http://www.sublimetext.com/blog/articles/sublime-text-2-0-released) for development, it has lots of great plugins. (It will ask you periodically if you want to buy a lisence but you can always dismiss it and keep using it for free)
You will want to install [Sublime Package Control](https://packagecontrol.io/) for easily installing and managing any sublime plugins you want. 
**Recommended Plugin** I highly recommend you install the plugin `gitgutter` once you have installed package control. If will mark the lines you have changed since the last commit in sublime's gutter (space between line numbers and code) and is like a real-time `git diff`. 


## Deploying to Live Site

When pulling from server (Kukla) use: 
$ git pull github master

Connection address for Cisco AnyConnect:
smb://home2.virginia.edu/WebHosts/faculty.virginia.edu/doc/berg
