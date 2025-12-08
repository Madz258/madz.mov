#!/bin/bash
cd "$(dirname "$0")"
echo "Grabbing Files"
git reset --hard
git clean -fd
git pull
echo "Restarting Nginx"
systemctl reload nginx
