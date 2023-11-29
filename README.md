# WebDev

podman run --hostname=Container -p=8080:80 -e POD_NAME=metadata.name -d mweinberger/webapp-image:recent

podman build -t webapp-image:recent .

podman tag webapp-image:recent mweinberger/webapp-image:recent

podman push mweinberger/webapp-image:recent 

podman container list
podman container stop 

be sure that the folder that is selected for the project is "webdev" and not www!!

the env variable does not work well without k8s, the POD_NAME is a literal string unless run in k8s