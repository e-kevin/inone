#!/usr/bin/env bash

source /app/vagrant/provision/common.sh

#== Import script args ==

github_token=$(echo "$1")

#== Provision script ==

info "Provision-script user: `whoami`"

info "Configure composer"
composer config --global github-oauth.github.com ${github_token}
#composer config --global repo.packagist composer https://packagist.phpcomposer.com
composer config --global repo.packagist composer https://mirrors.aliyun.com/composer
echo "Done!"

info "Install project dependencies"
cd /app
composer --no-progress --prefer-dist install -vvv

info "Init project"
./init --env=Installation --overwrite=y

info "Install inOne"
./yii environment/build --interactive=0

info "Create bash-alias 'app' for vagrant user"
echo 'alias app="cd /app"' | tee /home/vagrant/.bash_aliases

info "Enabling colorized prompt for guest console"
sed -i "s/#force_color_prompt=yes/force_color_prompt=yes/" /home/vagrant/.bashrc
