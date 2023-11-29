# WebDev

podman run -h=Container -p=8080:80 -e POD_NAME=metadata.name -d mweinberger/webapp-image:wip

podman build -t mweinberger/webapp-image:wip .

podman tag webapp-image:wip mweinberger/webapp-image:wip

podman push mweinberger/webapp-image:recent 

podman container list
podman container stop 

be sure that the folder that is selected for the project is "webdev" and not www!!

the env variable does not work well without k8s, the POD_NAME is a literal string unless run in k8s