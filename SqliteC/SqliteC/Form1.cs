using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.SQLite;

namespace SqliteC
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            SQLiteConnection ObjConnection = new SQLiteConnection("Data source=chinook.db;");
            SQLiteCommand ObjCommand = new SQLiteCommand("Select * from customers", ObjConnection);

            ObjCommand.CommandType = CommandType.Text;
            SQLiteDataAdapter ObjdataAdapter = new SQLiteDataAdapter(ObjCommand);
            DataSet dataset = new DataSet();
            ObjdataAdapter.Fill(dataset, "customers");
            dataGridView1.DataSource = dataset.Tables["customers"];
        }





    }
}
