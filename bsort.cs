static T[] bsort<T>(T[] array, Func<T, T, bool> comparer)
{
	bool flag = true;
	while (flag)
	{
		flag = false;
		for (int i=0; i<array.Length-1; i++)
		{
			T temp = array[i];
			if (comparer(temp, array[i+1]) == true)
			{
				flag = true;
				array[i] = array[i + 1];
				array[i + 1] = temp;
			}
		}
	}
	return array;
}