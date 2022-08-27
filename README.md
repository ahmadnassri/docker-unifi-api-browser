# Docker Template

a template for Docker projects

[![license][license-img]][license-url]
[![release][release-img]][release-url]
[![size][size-img]][size-url]
[![docker][docker-img]][docker-url]
[![github][github-img]][github-url]

# UniFi-API-Browser

A Docker image for [UniFi API Browser][]

> *This tool is for browsing data that is exposed through Ubiquiti's UniFi Controller API, written in PHP, JavaScript and the Bootstrap CSS framework.*

The API Browser lets you pull raw, JSON formatted data from the API running on your controller.

## Environment Variables

| Variable           | Required | Default            | Description                                                                                                                                                                                                  |
|--------------------|----------|--------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| CONTROLLER_IP      | ✅       |                    | IP address of the Unifi Controller                                                                                                                                                                           |
| CONTROLLER_PASS    | ✅       |                    | the password for access to the Unifi Controller                                                                                                                                                              |
| CONTROLLER_USER    | ✅       |                    | the user name for access to the Unifi Controller. NOTE: use a 'Local Access' account, not a 'Ubiquiti Account'.                                                                                              |
| CONTROLLER_PORT    | ❌       | `443`              | Port if you changed the port UniFi is running on                                                                                                                                                             |
| CONTROLLER_NAME    | ❌       | `UniFi Controller` | name for this controller which will be used in the dropdown menu                                                                                                                                             |
| DEBUG              | ❌       | `false`            | set to 'true' (without quotes) to enable debug output to the browser and the PHP error log when fetching the sites collection after selecting a controller                                                   |
| UI_AUTH            | ❌       | `false`            | enable/disable authentication                                                                                                                                                                                |
| UI_NAVBAR_BG_CLASS | ❌       | `dark`             | class for the main navigation bar background, valid options are: primary, secondary, success, danger, warning, info, light, dark, white, transparent                                                         |
| UI_NAVBAR_CLASS    | ❌       | `dark`             | class for the main navigation bar, valid options are: light, dark                                                                                                                                            |
| UI_PASS            | ❌       | `sha512(admin)`    | Generate a SHA512 of the password you want and put here, you can use a tool like <https://sha512.online/> by default the password is 'admin'                                                                 |
| UI_THEME           | ❌       | `darkly`           | your default theme of choice, pick one from the list below: bootstrap, cerulean, cosmo, cyborg, darkly, flatly, journal, lumen, paper readable, sandstone, simplex, slate, spacelab, superhero, united, yeti |
| UI_USER            | ❌       | `admin`            | username to secure the API Browser instance                                                                                                                                                                  |

## Usage

To get started this is the minimum number of options:

``` shell
docker run --name unifi-api-browser -p:8000:8000 -e CONTROLLER_IP=  -e CONTROLLER_PASS=  -e CONTROLLER_USER= ahmadnassri/unifi-api-browser
```

The container will run on port `8000` by default.

## Connecting to Multiple UniFi Controllers

Unifi-API-Browser supports multiple controllers. To use them create a copy of `users-tempalte.php` and `config-template.php` and mount them as volumes:

``` shell
docker run \
  --name unifi-api-browser \
  -p:8000:8000 \
  -e CONTROLLER_IP= \
  -e CONTROLLER_PASS= \  
  -e CONTROLLER_USER= \
  -v <HostPath>/config.php:/app/config/config.php \
  -v <HostPath>/users.php:/app/config/users.php \
  ahmadnassri/unifi-api-browser
```

  [UniFi API Browser]: https://github.com/Art-of-WiFi/UniFi-API-browser

----
> Author: [Ahmad Nassri](https://www.ahmadnassri.com/) &bull;
> Twitter: [@AhmadNassri](https://twitter.com/AhmadNassri)

[license-url]: LICENSE
[license-img]: https://badgen.net/github/license/ahmadnassri/template-docker

[release-url]: https://github.com/ahmadnassri/template-docker/releases
[release-img]: https://badgen.net/github/release/ahmadnassri/template-docker

[size-url]: https://hub.docker.com/r/ahmadnassri/template-docker
[size-img]: https://badgen.net/docker/size/ahmadnassri/template-docker?label=image%20size

[docker-url]: https://hub.docker.com/r/ahmadnassri/template-docker
[docker-img]: https://badgen.net/badge/icon/docker%20hub?icon=docker&label

[github-url]: https://github.com/users/ahmadnassri/packages/container/package/template-docker
[github-img]: https://badgen.net/badge/icon/github%20registry?icon=github&label
