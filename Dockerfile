FROM alpine:3.16.2

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

# expose port
EXPOSE 8000
