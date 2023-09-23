import psycopg2
from crud_functions import create_todo, read_todos, update_todo, delete_todo

db_name = "todo"
db_user = "postgres"
db_pass = "my-password"

conn = psycopg2.connect(database=db_name, user=db_user, password=db_pass)

# Create a new Todo item
create_todo(conn, "My new Todo item", "This is the description of my new Todo item.")

# Read all Todo items
todos = read_todos(conn)

# Update a Todo item
update_todo(conn, 1, "My updated Todo item", "This is the updated description of my Todo item.")

# Delete a Todo item
delete_todo(conn, 1)

conn.close()