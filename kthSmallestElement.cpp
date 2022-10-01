#include<bits/stdc++.h>
using namespace std;

int main() {

    int n = 5;
    int k = 3;
    int z = k-1;
    int temp = 0;
    int arr[] = {30, 90, 2, 19, 25};

    // set<int> s1;

    // for(int i = 0; i < n; i++){
    //     s1.insert(arr[i]);
    // }

    // set<int>::iterator it = s1.begin();
    // advance(it, z);
    // int x = *it;

    // cout << x;

    sort(arr, arr + n);

    cout << arr[k - 1];

    return 0;
}