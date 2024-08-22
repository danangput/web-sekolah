<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>

  <body class="bg-secondary">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="card border border-primary" style="width: 50rem; padding: 5rem;
       background: hsla(01988, 100%, 50%, 0.3)
">
          <div class="card-body">
            <h2 class="card-title text-center text-uppercase">Login</h2>
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  required
                />
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Allow Terms of Privacy</label>
              </div>
              <div class="d-flex justify-content-evenly">
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-box-arrow-in-right"></i> Login
                </button>
                <button type="submit" class="btn btn-success">
                  <i class="bi bi-pencil-square"></i>
                  <a
                    href="register.html"
                    target="_blank"
                    class="text-decoration-none text-white"
                    >Register</a
                  >
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
