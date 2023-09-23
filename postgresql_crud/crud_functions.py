#!/usr/bin/python


def create_todo(conn, title, description):
    """
    Create Todo
    """
    cur = conn.cursor()
    cur.execute("""
    INSERT INTO todos (title, description) VALUES (%s, %s)
    """, (title, description))
    cur.close()
    conn.commit()


def read_todos(conn):
    """ 
    Read Todos
    """
    cur = conn.cursor()
    cur.execute("""
    SELECT * FROM todos
    """)
    todos = cur.fetchall()
    cur.close()
    return todos


def update_todo(conn, id, title, description, completed=False):
    """ 
    Update Todo
    """
    cur = conn.cursor()
    cur.execute("""
    UPDATE todos SET title = %s, description = %s, completed = %s WHERE id = %s
    """, (title, description, completed, id))
    cur.close()
    conn.commit()

def delete_todo(conn, id):
    """ 
    Delete Todo
    """
    cur = conn.cursor()
    cur.execute("""
    DELETE FROM todos WHERE id = %s
    """, (id,))
    cur.close()
    conn.commit()