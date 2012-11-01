<?php

#!/bin/sh

echo
echo "**** Pulling changes into Live [Github's post-update hook]"
echo

cd $HOME/www || exit
unset GIT_DIR
git pull origin master

exec git-update-server-info

?>