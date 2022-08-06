using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            int calcularEdad;
            int anioActual;
            int anioNacimiento;

            Console.Write("Introduzca el año actual: ");
            anioActual=int.Parse(Console.ReadLine());

            Console.Write("Introduzca el año de nacimiento: ");
            anioNacimiento = int.Parse(Console.ReadLine());

            calcularEdad = anioActual - anioNacimiento;

            Console.WriteLine("Tu edad es: ");
            Console.WriteLine(calcularEdad);

            Console.ReadKey();


        }
    }
}
