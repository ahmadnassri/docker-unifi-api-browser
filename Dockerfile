# kics-scan disable=d3499f6d-1651-41bb-a9a7-de925fea487b,67fd0c4a-68cf-46d7-8c41-bc9fba7e40ae

FROM alpine:3.21

RUN apk update \
  && apk add --no-cache php php-session php-curl php-tokenizer composer git \
  && git clone --depth 1 https://github.com/Art-of-Wifi/UniFi-API-browser.git /app \
  && apk del git

COPY /src/*.php /app/config
COPY src/start-server /usr/local/bin/

# Define environment variable
# ENV PATH /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
# ENV LANG C.UTF-8
# ENV TZ America/Los_Angeles

# entrypoint
ENTRYPOINT [ "start-server" ]

HEALTHCHECK NONE

# hadolint ignore=DL3002
USER root

# expose port
EXPOSE 8000
