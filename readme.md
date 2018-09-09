
## Laravel Requirements

- PHP >= 7.1.3.
- OpenSSL PHP Extension.
- PDO PHP Extension.
- Mbstring PHP Extension.
- Tokenizer PHP Extension.
- XML PHP Extension.
- Ctype PHP Extension.
- JSON PHP Extension.

## Steps to run project

- Local server setup I used wamp server as my localhost. [Download Wamp](https://sourceforge.net/projects/wampserver/)
- Make sure you have Visual C++ Redistributable Packages. [Here](https://www.microsoft.com/en-za/download/details.aspx?id=48145)
- Add php path in your environment variables.
- Download composer. [Here]( https://getcomposer.org/download/ )
- Clone this repo using `https://github.com/tariqidrisi/assignment.git` command.
- Create a `assignment database` in your localhost.
- Edit your `.env` file as per your database configuration.  
- Run migrations using this command `php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"` and then perform `php artisan db:seed` and follow the steps. This will give you a default admin and user login details and also in users table.


For any assistance mail me on `mohammedtariq@programmer.net` or call me on `9004227568`
