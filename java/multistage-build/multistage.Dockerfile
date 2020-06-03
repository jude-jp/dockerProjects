FROM openjdk:7 AS builder
ARG APPDIR=app
ENV APPDIR $APPDIR
COPY . $APPDIR
RUN javac $APPDIR/HelloWorld.java

FROM openjdk:7-jre-slim
ARG APPDIR=app
ENV APPDIR $APPDIR
COPY --from=builder /$APPDIR/HelloWorld.class $APPDIR/
CMD java $APPDIR/HelloWorld
