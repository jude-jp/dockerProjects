FROM openjdk:7 AS builder

ARG APPDIR=app/java

ENV APPDIR $APPDIR

COPY ./java/ $APPDIR

RUN javac $APPDIR/HelloWorld.java

FROM openjdk:7-jre-slim

COPY --from=builder $APPDIR/HelloWorld.class $APPDIR

CMD java $APPDIR/HelloWorld