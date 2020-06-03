FROM openjdk:7

ARG APPDIR=/app/java

COPY ./java/ $APPDIR

RUN javac $APPDIR/HelloWorld.java

CMD ["java","${APPDIR}/HelloWorld"]