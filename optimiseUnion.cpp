#include <bits/stdc++.h>
using namespace std;

int main() {

    int a[] = {25, 85, 1, 32, 54, 6};
    int n = 6;
    int b[] = {85, 2, 1, 32, 9};
    int m = 5;

    set<int, greater<int> > s1;

    for(int i = 0; i < n; i++){
    	s1.insert(a[i]);
    }

    for(int i = 0; i < m; i++){
    	s1.insert(b[i]);
    }

    cout << s1.size();
    return 0;
}