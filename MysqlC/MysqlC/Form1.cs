using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace MysqlC
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void SaveUser()
        {
            string ConnectionString = "datasource=localhost;port=3306;username=root;password=;database=test;";
            string query = "INSERT INTO user VALUES (NULL,'"+textBox1.Text+"','"+textBox2.Text+"','"+textBox3.Text+"')";

            MySqlConnection databaseConnection = new MySqlConnection(ConnectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);
            commandDatabase.CommandTimeout=60;

            try
            {
                databaseConnection.Open();
                MySqlDataReader myReader = commandDatabase.ExecuteReader();
                MessageBox.Show("Usuario insertado");
                databaseConnection.Close();

            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }


        }

        private void button1_Click(object sender, EventArgs e)
        {
            //Llamado a la funcion insertar usuario en la base de datos
            SaveUser();
        }

        private void ListarDatos()
        {
            string connectionString = "datasource=localhost;port=3306;user=root;password=;database=test;";
            string query = "SELECT * from user";

            MySqlConnection databaseConnection=new MySqlConnection(connectionString);
            MySqlCommand databaseCommand = new MySqlCommand(query, databaseConnection);
            databaseCommand.CommandTimeout = 60;
            MySqlDataReader Reader;

            try
            {

                databaseConnection.Open();
                Reader = databaseCommand.ExecuteReader();

                if (Reader.HasRows)
                {
                    while (Reader.Read())
                    {
                        Console.WriteLine(Reader.GetString(0)+" - "+Reader.GetString(1)+" - "+Reader.GetString(2)+" - "+Reader.GetString(3));
                        string[] fila = { Reader.GetString(0),Reader.GetString(1),Reader.GetString(2),Reader.GetString(3)};
                        var listViewItem = new ListViewItem(fila);
                        listView1.Items.Add(listViewItem);
                    }

                }
                else
                {
                    MessageBox.Show("no se encontro nada en la base de datos");
                }
                databaseConnection.Close();

            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            //Llamado a la funcion ListarDatos para popular el listview
            ListarDatos();
        }

        private void Actualizar()
        {

            string connectionString = "datasource=localhost;port=3306;user=root;password=;database=test;";
            string query = "UPDATE user SET Nombres='Willy',Apellidos='Wonka', Direccion='Chocolate' where ID=1";

            MySqlConnection databaseConnection=new MySqlConnection(connectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);
            commandDatabase.CommandTimeout = 60;
            MySqlDataReader reader;

            try
            {
                databaseConnection.Open();
                reader = commandDatabase.ExecuteReader();
                databaseConnection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }




        }

        private void button2_Click(object sender, EventArgs e)
        {
            Actualizar();
        }

        private void Borrar()
        {

            string connectionString = "datasource=localhost;port=3306;user=root;password=;database=test;";
            string query = "delete from user where ID=1";

            MySqlConnection databaseConnection = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);
            commandDatabase.CommandTimeout = 60;
            MySqlDataReader reader;

            try
            {
                databaseConnection.Open();
                reader = commandDatabase.ExecuteReader();
                databaseConnection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }



        }

        private void button4_Click(object sender, EventArgs e)
        {
            Borrar();
        }



    }
}
