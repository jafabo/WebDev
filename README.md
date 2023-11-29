# WebDev

podman run -h=Container -p=8080:80 -e POD_NAME=metadata.name -d mweinberger/webapp-image:recent

podman build -t mweinberger/webapp-image:recent .

podman tag webapp-image:recent mweinberger/webapp-image:recent

podman push mweinberger/webapp-image:recent 

be sure that the folder that is selected for the project is "webdev" and not www!!

the image name needs to be the exact same in all of the parts for things to work!!! Set test branch to test image, etc.

the env variable does not work well without k8s, the POD_NAME is a literal string unless run in k8s