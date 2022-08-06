using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace CalculadoraC
{
    public partial class Form1 : Form
    {
        double numero1 = 0, numero2 = 0;
        char Operador;

        public Form1()
        {
            InitializeComponent();
        }

        private void agregarnumero(object sender, EventArgs e)
        {
            var Boton = ((Button)sender);

            if (txtResultado.Text == "0")
                txtResultado.Text = "";

            txtResultado.Text += Boton.Text;
        }

        private void ClickOperador(object sender, EventArgs e)
        {
            var Boton = ((Button)sender);
            numero1 = Convert.ToDouble(txtResultado.Text);
            Operador = Convert.ToChar(Boton.Text);
        }


    }
}
