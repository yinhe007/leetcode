func moveZeroes(nums []int)  {
	var i,j int
	for _,v:=range nums {
		if v != 0{
			nums[j]=v
            j++
		}else{
            i++
        }
	}
    for l:=len(nums)-i;l<len(nums);l++{
        nums[l]=0
    }
    fmt.Println(nums)
}