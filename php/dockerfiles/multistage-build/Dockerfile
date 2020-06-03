FROM openjdk:7

ARG APPDIR=app/java

ENV APPDIR $APPDIR

COPY ./java/ $APPDIR

RUN javac $APPDIR/HelloWorld.java

CMD java ${APPDIR}/HelloWorld
