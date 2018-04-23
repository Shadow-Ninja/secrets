FROM postgres
ENV POSTGRES_DB guests
COPY database.sql /docker-entrypoint-initdb.d/
EXPOSE 5432