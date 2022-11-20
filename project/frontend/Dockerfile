# develop stage
FROM node:14-alpine as develop-stage
WORKDIR /app

COPY package*.json ./
RUN yarn global add @quasar/cli
COPY ./ .
ENV BACKEND_BASE=http://localhost:8080
# build stage
FROM develop-stage as build-stage
RUN yarn
RUN quasar build --debug
# production stage
FROM nginx:1.17.5-alpine as production-stage
COPY --from=build-stage /app/dist/spa /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
