use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$decoded = JWT::decode($jwt, new Key($key, 'HS256'));