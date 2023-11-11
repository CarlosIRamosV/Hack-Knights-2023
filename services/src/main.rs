use actix_web::{get, post, web, App, HttpResponse, HttpServer, Responder, HttpRequest};
use serde::{Deserialize, Serialize};

#[derive(Serialize)]
struct Info {
    name: String,
}
#[derive(Deserialize)]
struct User {
    name: String,
    username: String,
}

#[post("/user")]
async fn user(info: web::Json<User>) -> impl Responder {
    HttpResponse::NotFound().json(Info {
        name: info.name.clone(),
    })
}

#[actix_web::main]
async fn main() -> std::io::Result<()> {
    HttpServer::new(|| {
        App::new()
            .service(user)
    })
    .bind(("0.0.0.0", 8080))?
    .run()
    .await
}