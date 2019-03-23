git rm -rf .
git checkout HEAD -- .gitignore .htaccess build.sh dbconnect.php
cp -rf ~/workspace_electron/mypos/build/* .
mv index.html react-index.html

