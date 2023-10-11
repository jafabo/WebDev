# WebDev

docker run --hostname=Container --mac-address=02:42:ac:11:00:02 --env=PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin --env=TZ=America/New_York --label='org.opencontainers.image.ref.name=ubuntu' --label='org.opencontainers.image.version=23.10' --runtime=runc -p=8080:80 -e POD_NAME=metadata.name -d mweinberger/webapp-image:recent

docker build -t webapp-image:recent .


be sure that the folder that is selected for the project is "webdev" and not www!!

the env variable does not work well without k8s, the POD_NAME is a literal string unless run in k8s