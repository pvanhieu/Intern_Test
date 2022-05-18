using System;

namespace Bai1_b
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] findFrequent = { 10, 11, 2, 30, 22, 6, 8, 22, 9, 15, 12, 22 };
            int[] b = new int[100];
            Console.Write("Xuat mang: ");
            for (int i = 0; i < findFrequent.Length; i++)
            {
                Console.Write("{0} ", findFrequent[i]);
            }
            Console.Write("\n\n");
            ///
            for (int i = 0; i < findFrequent.Length; i++)
            {
                for (int j = i; j < findFrequent.Length; j++)
                {
                    if (findFrequent[j] == findFrequent[i])
                        b[i]++;
                }
            }
            int max = 1;
            for (int i = 0; i < findFrequent.Length; i++)
            {
                if (b[i] > max)
                    max = b[i];
            }
            for (int i = 0; i < findFrequent.Length; i++)
            {
                if (b[i] == max)
                    Console.WriteLine("Phan tu co lan xuat hien nhieu nhat: {0}", findFrequent[i]);
            }
        }
    }
}
