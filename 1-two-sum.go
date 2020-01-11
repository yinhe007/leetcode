func toSum(nums []int,target int) []int{
	myMap := make(map[int]int,len(nums))
	ret := []int{}
	
	for i,v := range nums{
		if v1,ok := myMap[target-k],ok{
			ret =[]int{i,v1}
		}
		myMap[v]=i
	}
	return ret
}