# Personal Task Manager (REST API System)
Use Laravel 7

## API rules

GET
- /api/tasks        show all tasks
- /api/tags         show all tags
- /api/tasks/{id}   show task by ID and relations tags
- /api/tags/{id}    show tags by ID and relations tasks
POST
- /api/tasks        params: name(required), description, tags(array|integer) add task
- /api/tags         params: name(required)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
