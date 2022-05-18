using System;

namespace Bai1_a
{
    class Program
    {
        static void Main(string[] args)
        {
            //int[] finMax5 = { 3, 4, 5, 3, 2, 3, 10, 11 };
            int[] finMax5 = { 14, 12, 38, 17, 10, 36, 12, 29, 45, 34, 48, 22 };
            //int[] finMax5 = { 10, 11, 2, 30, 22, 6, 8, 9, 11, 12, 22 };
            int[] b = new int[100];
            Console.Write("Xuat mang: ");
            for (int i = 0; i < finMax5.Length; i++)
            {
                Console.Write("{0} ", finMax5[i]);
            }
            //finmax5
            int tmp;
            for (int i = 0; i < finMax5.Length; i++)
            {
                for (int j = i + 1; j < finMax5.Length; j++)
                {
                    if (finMax5[j] > finMax5[i])
                    {
                        tmp = finMax5[i];
                        finMax5[i] = finMax5[j];
                        finMax5[j] = tmp;
                    }
                }
            }
            Console.Write("\n5 so lon nhat cua mang: ");
            for (int i = 0; i < 5; i++)
            {
                Console.Write("{0}  ", finMax5[i]);
            }
        }
    }
}
