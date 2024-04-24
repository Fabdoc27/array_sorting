## Finding Target or Insertion Point in Sorted Array

This document explores the concept of finding the target element's index or the
insertion point within a sorted array. It also includes a PHP code
implementation that utilizes binary search to achieve this efficiently.

### Problem

Locate the target element's index within the array (if present). Determine the
index where the target element would be inserted to maintain the sorted order
(if not present).

> Example: Consider the input numbers = [1,3,5,6] and target target = 7.

The target 7 is not present in the array. However, to maintain the sorted order,
7 would be inserted at index 4.

### Solution Approach:

**Sorting the Array (Optional)**: While the problem assumes a sorted array, the
code includes an optional sorting step for flexibility.

**Binary Search**: The code employs binary search, a divide-and-conquer search
algorithm, to efficiently locate the target element within the sorted array.
Implementation

The code includes a function named search that takes the sorted array numbers
and the target integer target as input. Here's a breakdown of its functionality:

- Optional Sorting: The function can optionally sort the array using the sort()
  function.
- Binary Search: It iterates through the sorted array using a binary search
  approach. This involves Calculating the middle index of the current search
  space (array portion). Comparing the target with the element at the middle
  index. If they match, the target element is found, and the function returns
  its index.
- If the target is less than the middle element, the search continues in the
  left half of the remaining array.
- If the target is greater than the middle element, the search continues in the
  right half of the remaining array.
- Target Not Found: If the loop completes without finding the target, it means
  the target is not present in the array. In this case, the function returns the
  index where the target would be inserted to maintain the sorted order
  (typically the left index after the loop).

### Efficiency

Time Complexity: O(log n), signifying efficient search due to binary search.
Space Complexity: O(1), indicating constant additional space usage.

### Note

The code assumes the input array can be modified (passed by reference using &).
