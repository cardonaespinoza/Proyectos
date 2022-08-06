using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace NumerosPrimosC
{
    class Program
    {
        static void Main(string[] args)
        {
            int numero;
            
            Console.Write("Escribe un numero: ");
            numero = int.Parse(Console.ReadLine());
            if (esPrimo(numero) == true)
            {
                Console.WriteLine("Es numero primo");
            }
            else
            {
                Console.WriteLine("No es numero primo");
            }

            Console.ReadKey();
            
        }

        public static bool esPrimo(int numero)
        {
            for (int i = 2; i < numero; i++)
            {
                if (numero % i == 0)
                {
                    return false;
                }

            }
            return true;
        }
    }
}
