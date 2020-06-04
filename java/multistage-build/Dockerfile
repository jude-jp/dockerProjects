FROM openjdk:7
ARG APPDIR=app
ENV APPDIR $APPDIR
COPY . $APPDIR
RUN javac $APPDIR/HelloWorld.java
CMD java ${APPDIR}/HelloWorld
